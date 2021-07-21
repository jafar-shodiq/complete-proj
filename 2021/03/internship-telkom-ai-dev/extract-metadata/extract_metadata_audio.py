
from vad.vad import VoiceActivityDetector
import os
import numpy as np
import glob
import pickle

BASE_FILE = 'data/audio/'

all_files = glob.glob(BASE_FILE+'*.wav')
dict_vad = {}
for file in all_files:
    dict_vad[file] = VoiceActivityDetector(file)

dict_detected_windows = {}
for file in all_files:
    print(file)
    dict_detected_windows[file] = dict_vad[file].detect_speech()

pickle.dump(dict_detected_windows,open('dict_detected_windows','wb'))

