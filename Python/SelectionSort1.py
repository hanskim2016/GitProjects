# import random
#
# arr = []
# i = 0
#
# while i < 10:
#     arr.append(random.randint(1,100))
#     i+=1
#

arr = [1,2,-5, 3]

minvalue = arr[0]
j = 0

while j < len(arr):
    if minvalue > arr[j]:
        minvalue = arr[j]


    else:
        pass

    temp = arr[j]
    arr[j] = minvalue

    j += 1


print minvalue
print arr
