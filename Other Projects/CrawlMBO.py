from urllib2 import urlopen
from bs4 import BeautifulSoup
import pprint

url = 'http://www.ministrybooks.org/life-studies.cfmB'
soup = BeautifulSoup(urlopen(url), "html.parser")

results =  soup.find_all('a')

for x in results:
    print x
