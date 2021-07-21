from translate import Translator

translator = Translator(to_lang='ja') #japanese
try:
    with open('./translate.txt', mode='r') as my_file:
        text = my_file.read()
        print(text)
        translation = translator.translate(text)
except FileNotFoundError as err:
    print('file does not exist')

print(translation)