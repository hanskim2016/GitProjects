
a = [2,4,10,16]
i = 0

def multiply (list, multiplier):
    for i in range (0, len(a)):
         a[i] = a[i]* multiplier
         print a[i]
         i = i+1




b = multiply(a, 5)

print a
