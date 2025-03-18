while True:
  calc = input('Do you want to continue? Y/N ')
  if calc.capitalize()=='N':
    print('Goodbye!')
    break

  if calc.capitalize()=='Y':
    print('Welcome to Calculator!\n\nSelect Operator:\n\nM = Multiplication\nD = Division\nA = Addition\nS = Subtraction')

    opt = input('Choose an operator: ')

    if opt.capitalize()=='M':
      n1 = float(input('Enter 1st Number: '))
      n2 = float(input('Enter 2nd Number: '))
      print('Result: ', n1, '×', n2, '=', n1 * n2)

    if opt.capitalize()=='D':
      n1 = float(input('Enter 1st Number: '))
      n2 = float(input('Enter 2nd Number: '))
      if n2 == 0:
        print('Invalid Input: Division by zero')
      else:
        print('Result: ', n1, '÷', n2, '=', n1 / n2)

    if opt.capitalize()=='A':
      n1 = float(input('Enter 1st Number: '))
      n2 = float(input('Enter 2nd Number: '))
      print('Result: ', n1, '+', n2, '=', n1 + n2)

    if opt.capitalize()=='S':
      n1 = float(input('Enter 1st Number: '))
      n2 = float(input('Enter 2nd Number: '))
      print('Result: ', n1, '-', n2, '=', n1 - n2)
