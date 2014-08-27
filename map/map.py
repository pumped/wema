import mapscript
import fileinput, os

lines = ['ncols         3084\n', 'nrows         5045\n', 'xllcorner     143.916567517\n', 'yllcorner     -20.02510726\n', 'cellsize      0.001\n', 'NODATA_value  -9999\n']

mapfile = 'static.map'
id = "ab"

filepath = "/home/dylan/Dev/test/scratch/runs/asdfasd/"
fixedDir = filepath + "fixed/"
savepath = "/var/www/wema/map/imgs/"+id+"/"
fix = False

if not os.path.exists(savepath):
    os.makedirs(savepath)

if not os.path.exists(fixedDir):
    os.makedirs(fixedDir)

m = mapscript.mapObj(mapfile)


for i in range(5,100):

	if fix:
		print "fixed"
		with open(filepath+'agg'+str(i)+".asc", 'r+') as inFile:
			with open (fixedDir+'agg'+str(i)+".asc",'w') as outFile:
				num = 0
				for line in inFile:
					if num < 6:
						l = lines[num]
						num+=1
						outFile.write(l)
					else:
						outFile.write(line)
	
	print i

	#set layer data file
	layer = m.getLayerByName("dispersal")
	layer.data = "agg"+str(i)+".asc"

	m.draw().save(savepath+"a"+str(i-5)+".png")
