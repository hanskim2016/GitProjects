import random

# Selection Sort

def selection_sort(my_list):
    len_list = len(my_list)
    for i in range(len_list):
        min_index = i
        for j in range(i+1,len_list):
            if my_list[j] < my_list[min_index]:
                min_index = j
        if min_index != i:
        	my_list[i], my_list[min_index] = my_list[min_index], my_list[i] # Tuple unpacking
    return my_list

# Generate a random list
random_list = [random.randint(0,10000) for count in range(100)]

print(random_list)
print(selection_sort(random_list))
