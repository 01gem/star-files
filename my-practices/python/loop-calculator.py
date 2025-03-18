while True:
    calc = input('Do you want to continue? Y/N: ')

    if calc.capitalize()=='N':
        print('Goodbye!')
        break

    if calc.capitalize()=='Y':
        print('\n\nWelcome to my Calculator!\n\nSelect Operation:\n\nM = Multiplication\nD = Division\nA = Addition\nS = Subtraction\n\n')

        optr = input('Enter Operation: ')

        if optr.capitalize()=='M':
            n1 = float(input('Enter 1st Number: '))
            n2 = float(input('Enter 2nd Number: '))
            print('Answer: ', n1, 'x', n2, '=', n1 * n2)

        elif optr.capitalize()=='D':
            n1 = float(input('Enter 1st Number: '))
            n2 = float(input('Enter 2nd Number: '))
            if n2==0:
                print('Invalid Input!')
            else:
                print('Answer: ', n1, '÷', n2, '=', n1 / n2)
