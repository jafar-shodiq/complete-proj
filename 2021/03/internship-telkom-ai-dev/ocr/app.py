from flask import Flask, request, jsonify, render_template
# from facehandler import makeBlob, fromBlob, compare
from mysql.connector import connect, Error
# from dbSeed import con, cur
# from fileHandler import saveFile
# from flask_cors import CORS
from copy import deepcopy
import os
import json
from flask_httpauth import HTTPBasicAuth
from minio import Minio
from minio.error import S3Error
from sys import getsizeof
from PIL import Image
from io import BytesIO
from flask_jwt_extended import create_access_token, JWTManager, jwt_required, get_jwt_identity

# Face and OCR
from downloadHandler import download_by_url, analyze_video, np_encoder, aggregate_text


app = Flask(__name__)
# CORS(app)
ALLOWED_EXTENSIONS = ['png', 'jpg']
UPLOAD_FOLDER = 'images'
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER


@app.route('/downloadOCR', methods=['GET'])
def downloadOCR():
    req = request.args
    try:
        video_path = download_by_url(req['url'])
        result = analyze_video(video_path)

        res_text = aggregate_text([i['text']
                                  for i in result['result_feature']])
        result['agg_text'] = res_text

    except Error as E:
        return 'Err'
    return json.dumps(result, default=np_encoder)


if __name__ == '__main__':
    app.debug = True
    app.run(port=9000)
