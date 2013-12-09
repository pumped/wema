from bottle import static_file, route, run
from models import Models


@route('/')
def default():
    return "Welcome to the Pink elephant rampage Web API"

@route('/set/zones/<zones>')
def setData(zones=None):
    html = ""
    m = Models()
    if zones:
	    html += zones
    return "Set Zones: " + html

@route('/run/<params>')
def setData(params=None):
    m = Models()
    if params:
    	#parse paramaters
    	pass
    	
    m.run()
    return "Models Complete"

@route('/restore/<project>')
def restore(project):
	m = Models()
	m.restore(project)
	return "PU file Restored"

@route('/data/<filename>')
def server_static(filename):
    return static_file(filename, root='Data')
    
from bottle import error
@error(404)
def error404(error):
    return '{"error" : {"code" : 404, "string" : "Invalid Request"}}'


run(host='192.168.1.2', port=5566, debug=True)
