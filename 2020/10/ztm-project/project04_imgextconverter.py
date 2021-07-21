import os
from PIL import Image

input_dir = input('input dir: ')
output_dir = input('output dir: ')

if not os.path.exists(output_dir):
    os.makedirs(output_dir)

for filename in os.listdir(input_dir):
    img = Image.open(f'{input_dir}/{filename}')
    clean_name = os.path.splitext(filename)[0]
    img.save(f'{output_dir}/{clean_name}.png', 'png')
    print('done')