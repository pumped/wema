#Marxan Command line Python Wrapper
import subprocess, threading, os
from subprocess import Popen
import fileinput
import sys

class Models:
    
    process = None
    
    def __init__(self):
        pass
    
    def run(self, opts=None, project="Demo"):
        pass
        #self.runCommand(['./marxan32'], os.getcwd()+'/Marxan/Projects/'+project+'/')
			
    def restore(self,project):
		f = open(os.getcwd()+'/Marxan/Projects/'+project+'/input/puOrig.dat','r')
		contents = f.read()
		f.close()
		f = open(os.getcwd()+'/Marxan/Projects/'+project+'/input/pu.dat','w')
		f.write(contents)
		f.close()
		
    
    def runCommand(self, command, cwd, timeout=60):
                
        def commandThread():
            #print command
            self.process = Popen(command, cwd=cwd, stdout=subprocess.PIPE, stdin=subprocess.PIPE)
            self.process.stdin.write("\n")
            self.process.communicate() #wait
            
        thread = threading.Thread(target=commandThread)
        thread.start()

        thread.join(timeout)
        if thread.is_alive():
            print 'Terminating potentially stuck process'
            self.process.terminate()
            thread.join()
    
    
    

#class manages marxan datasets
class CircuitScape:
    
    def setConfig(self, params):
        return true
    
    def getBestSolution(self):
        return 'asdf'
    
    
