import os
from sys import platform




if platform == "linux" or platform == "linux2":
    print("your using linux!")


    #true = "l"
    #while true:
    #    os.fork()
   
elif platform == "darwin":
    print("MacOS")
elif platform == "win32":
    # Windows...
    print("windows")

















#import threading
#
#class MyThread(Thread):
#    def __init__(self, name):
#        Thread.__init__(self)
#        self.name = name
#
#    def run (self):
#        for i in range(1000000):
#            msg = "%s is running" % \
#                self.name
#            print(msg)
#
#def create_threads():
#    for i in range(10000):
#        name = "Thread #%s" % (i + 1)
#        my_thread = MyThread(name)
#        my_thread.start()
#
#if __name__ == "__main__":
#    create_threads()
#