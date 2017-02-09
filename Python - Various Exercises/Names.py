students = {
     {'first_name':  'Michael', 'last_name' : 'Jordan'},
     {'first_name' : 'John', 'last_name' : 'Rosales'},
     {'first_name' : 'Mark', 'last_name' : 'Guillen'},
     {'first_name' : 'KB', 'last_name' : 'Tonel'}
}



# i = 0
#
# while i < len(students):
#     print students[i]['first_name'] + " " + students[i]['last_name']
#     i += 1

for k, v in students.items():
    print k
    print v
