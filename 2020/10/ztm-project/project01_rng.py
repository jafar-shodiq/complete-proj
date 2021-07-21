from random import randint

first = int(input('min number: '))
last = int(input('max number: '))

answer = randint(first, last)

while True:
    try:
        guess = int(input(f'guess a number {first}-{last}: '))
        if first <= guess <= last:
            if guess == answer:
                print('you got the number!')
                break
        else:
            print(f'please enter a number between {first}-{last}')

    except ValueError:
        print('please enter a number')
        continue




