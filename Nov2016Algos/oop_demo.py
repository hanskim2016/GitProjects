class Vertebrate(object):
    def __init__(self):
        self.has_backbone = True



class Mammal(Vertebrate):
    def __init__(self):
        super(Vertebrate, self).__init__()
        self.is_warm_blooded = True
    def breathe(self):
        print "respiring"

class Cat(Mammal):
    def __init__(self, name):
        super(Mammal, self).__init__()
        self.name = name
        self.hp = 20
        self.well_being = 100
        self.hunger = 0
        self.number_of_legs = 4

    def meow(self):
        print "meow"
    def sleep():
        pass
    def walk(self):
        self.hp -= 3
    def chase_bird(self):
        self.hp -=12
        print "Chased a bird, hp is:"

squirrel = Cat("confused")

print squirrel.breathe
