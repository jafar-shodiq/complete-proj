import re

#at least 8 char long
#contain any sort letters, numbers, $%#@

pattern = re.compile(r"[A-Za-z0-9!@#$%^&+=]{8,}")
string = input('enter your password: ')

a = pattern.fullmatch(string)
print(a)