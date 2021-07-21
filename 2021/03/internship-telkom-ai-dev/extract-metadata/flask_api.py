import face_recognition
import numpy as np
import glob
import json
from flask import Flask, request, jsonify, render_template
import os
from flask import jsonify
# from flask_httpauth import HTTPBasicAuth
from sys import getsizeof
from PIL import Image
from io import BytesIO
# from flask_jwt_extended import create_access_token, JWTManager, jwt_required, get_jwt_identity
from flask_cors import CORS
import pickle

import io
import re
import glob
import nltk
import numpy as np
import pandas as pd
from collections import Counter
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.util import ngrams
from sklearn.feature_extraction.text import TfidfVectorizer
nltk.download('stopwords')


def cosine_sim(a, b):
    cos_sim = np.dot(a, b)/(np.dot(a, a.T)*np.dot(b.T, b))
    return cos_sim


def cosine_sim_batch(a, b):
    similarity = a * b
    similarity = similarity.toarray()
    return similarity


class Retrieval:
    def __init__(self):
        self.stop_words = set(stopwords.words('indonesian'))
        self.stop_words.add('telkom')
        self.stop_words.add('indonesia')

    def retrieve(self, query, n, ngram=1):
        if ngram == 2:
            df = self.retrieve_bigram(query)
        else:
            df = self.retrieve_unigram(query)

#         files = get_files()
#         df.docs = df.docs.str.replace('.txt', '.pdf')

#         df = pd.merge(df, files, on='docs')

        df = df.head(n)
        df['file'] = df.docs.apply(lambda x: x.split('_&_')[0])
        df['words'] = df.docs.apply(lambda x: x.split('_&_')[1])
        df = df.drop('docs', axis=1)
        return df

    def retrieve_unigram(self, query):
        query_vector_unigram = self.unigram.transform([query])

        scores_unigram = cosine_sim_batch(
            self.mentahan_tfidf_unigram, query_vector_unigram.T).ravel()

        self.result_unigram = scores_unigram
        df = pd.DataFrame(
            {'docs': self.vectors_unigram.keys(), 'score': scores_unigram})
        df = df.sort_values('score', ascending=False).reset_index(drop=True)
        return df

    def retrieve_bigram(self, query):
        query_vector_bigram = self.bigram.transform([query])
        scores_bigram = []
        for f in self.vectors_bigram:
            a = self.vectors_bigram[f]
            b = query_vector_bigram.T
            s = cosine_sim(a, b)
            scores_bigram.append(s.A1[0])
        self.result_bigram = scores_bigram
        df = pd.DataFrame(
            {'docs': selfself.vectors_bigram.keys(), 'score': scores_bigram})
        df = df.sort_values('score', ascending=False).reset_index(drop=True)
        return df

    def retrieve_unigram_depricated(self, query):
        query_vector_unigram = self.unigram.transform([query])
        scores_unigram = []
        for f in self.vectors_unigram:
            a = self.vectors_unigram[f]
            b = query_vector_unigram.T
            s = cosine_sim(a, b)
            scores_unigram.append(s.A1[0])

        self.result_bigram = scores_unigram
        df = pd.DataFrame(
            {'docs': self.vectors_unigram.keys(), 'score': scores_unigram})
        df = df.sort_values('score', ascending=False).reset_index(drop=True)
        return df

    def retrieve_bigram_depricated(self, query):
        query_vector_bigram = self.bigram.transform([query])
        scores_bigram = []
        for f in self.vectors_bigram:
            a = self.vectors_bigram[f]
            b = query_vector_bigram.T
            s = cosine_sim(a, b)
            scores_bigram.append(s.A1[0])
        self.result_bigram = scores_bigram
        df = pd.DataFrame(
            {'docs': selfself.vectors_bigram.keys(), 'score': scores_bigram})
        df = df.sort_values('score', ascending=False).reset_index(drop=True)
        return df

    def sync(self, all_data):
        bigram = TfidfVectorizer(
            use_idf=True, stop_words=self.stop_words, ngram_range=(1, 2))
        unigram = TfidfVectorizer(use_idf=True, stop_words=self.stop_words)
        symbols = "!\"#$%&()*+-./:;<=>?@[\]^_`{|}~\n"
        lines = {}
        list_sentence = []

        for f in all_data.keys():
            for sentence in all_data[f]['agg_text'].keys():
                lines[f+'_&_'+sentence] = sentence
                list_sentence.append(sentence)

        tfidf_bigram = bigram.fit_transform(lines.values())
        tfidf_unigram = unigram.fit_transform(lines.values())

        self.mentahan_tfidf_unigram = tfidf_unigram
        self.mentahan_tfidf_bigram = tfidf_bigram

        vectors_bigram = {f: v for f, v in zip(lines.keys(), tfidf_bigram)}
        vectors_unigram = {f: v for f, v in zip(lines.keys(), tfidf_unigram)}

        self.list_sentence = list_sentence
        self.bigram = bigram
        self.unigram = unigram
        self.vectors_bigram = vectors_bigram
        self.vectors_unigram = vectors_unigram


app = Flask(__name__)
CORS(app)
ALLOWED_EXTENSIONS = ['png', 'jpg']
UPLOAD_FOLDER = 'images'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER


def load_link_url(link_to_face):
    data_txt = glob.glob('data/video/*.txt')
    for filename_face in link_to_face:
        file_text = '.'.join(filename_face.split('.')[:-1])+'.txt'
#         print(file_text)
        if file_text not in data_txt:
            link_to_face[filename_face]['url'] = 'not_found'
        else:
            link_to_face[filename_face]['url'] = json.load(
                open(file_text, 'r'))['url']
    return link_to_face


def iterate_face(img, threshold=0.4):
    poi_face = face_recognition.face_encodings(np.array(img))
    found_data = []
    for key in all_faces.keys():
        for face in all_faces[key]['agg_faces'].keys():
            distance = face_recognition.face_distance(
                all_faces[key]['agg_faces'][face]['face_image'], poi_face)
            if distance < threshold:
                found_data.append((key, face))
    return found_data


def find_face_on_data(img):
    res = iterate_face(img)
    all_aggregate_face = {}
    for i in res:
        #         print(i[0])
        if i[0] in all_aggregate_face.keys():
            all_aggregate_face[i[0]]['time'] += list(
                np.array(all_faces[i[0]]['agg_faces'][i[1]]['time'])*10)
        else:
            all_aggregate_face[i[0]] = {}
            all_aggregate_face[i[0]]['url'] = all_faces[i[0]]['url']
            all_aggregate_face[i[0]]['time'] = list(
                np.array(all_faces[i[0]]['agg_faces'][i[1]]['time'])*10)
    return all_aggregate_face


def np_encoder(object):
    if isinstance(object, np.generic):
        return object.item()


def convert_response_stt(data, all_faces):
    return_data = {}
    for i in data.keys():
        i_split = i.split('/')
        i_split[1] = 'video'
        i_split[2] = i_split[2][:-4]+'.mp4'
        key_name = '/'.join(i_split)
        return_data[key_name] = {}
        return_data[key_name]['agg_text'] = {}
        for j in data[i]:
            if len(j[2].strip()) > 3:
                if j[2].strip() not in return_data[key_name]['agg_text'].keys():
                    return_data[key_name]['agg_text'][j[2].strip()] = [{'start': j[0]//100,
                                                                        'end':j[1]//100}]
                else:
                    return_data[key_name]['agg_text'][j[2].strip()].append({'start': j[0]//100,
                                                                            'end': j[1]//100})
        return_data[key_name]['url'] = all_faces[key_name]['url']
    return return_data


all_faces = pickle.load(open('features', 'rb'))  # face n ocr
all_faces = load_link_url(all_faces)

retri = Retrieval()
retri.sync(all_faces)

# all_response_stt = pickle.load(open('all_response_stt', 'rb'))  # stt
# converted_stt = convert_response_stt(all_response_stt, all_faces)

# retri_stt = Retrieval()
# retri_stt.sync(converted_stt)


def query_search(txt, obj_retri, find_on_this):
    result = obj_retri.retrieve(txt, n=20)
    all_result = {}
    for i in result.T.to_dict().values():
        if i['file'] not in all_result.keys():
            all_result[i['file']] = {}
            all_result[i['file']]['time'] = find_on_this[i['file']
                                                         ]['agg_text'][i['words']]
            all_result[i['file']]['url'] = find_on_this[i['file']]['url']
        else:
            all_result[i['file']]['time'] += find_on_this[i['file']
                                                          ]['agg_text'][i['words']]
    return all_result


@app.route('/find_face', methods=['POST'])
def find_face():
    req = request.form
    imgfile = request.files['image']
    image = face_recognition.load_image_file(imgfile)
    result_face = find_face_on_data(image)
    return json.dumps(result_face, default=np_encoder)


@app.route('/find_text_on_ocr', methods=['GET'])
def find_text_on_ocr():
    argument = request.args
    result = query_search(argument['text'], retri, all_faces)
    for i in result.keys():
        new_data = []
        temp_data = result[i]["time"]
        for j in temp_data:
            new_data.append({"start": j['start']*10, "end": j['end']*10})
        result[i]["time"] = new_data
    return json.dumps(result, default=np_encoder)


@app.route('/find_text_on_audio', methods=['GET'])
def find_text_on_audio():
    argument = request.args
    result = query_search(argument['text'], retri_stt, converted_stt)
    for i in result.keys():
        new_data = []
        temp_data = result[i]["time"]
        for j in temp_data:
            new_data.append({"start": j['start'], "end": j['end']})
        result[i]["time"] = new_data
    return json.dumps(result, default=np_encoder)


@app.route('/', methods=['GET'])
def hello_world():
    return "halo"


if __name__ == '__main__':
    app.debug = True
    app.run(host="0.0.0.0", port=8932)
