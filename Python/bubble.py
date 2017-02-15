


arr = [889,5,7,9,3,-6,8,3]

print arr

j = 0
i = 0

while (j < len(arr)):
    while (i+1 < len(arr)):
        if arr[i] > arr[i+1]:
            temp = arr[i+1]
            arr[i+1] = arr[i]
            arr[i] = temp
            i += 1
        else:
            i += 1

        print arr


    j += 1
    i = 0
