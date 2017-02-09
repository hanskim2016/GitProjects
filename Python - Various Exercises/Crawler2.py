import sys
reload(sys)
sys.setdefaultencoding('utf-8')

# import the urlopen function from the urllib2 module
from urllib2 import urlopen
# import the BeautifulSoup function from the bs4 module
from bs4 import BeautifulSoup
# import pprint to print things out in a pretty way
import pprint
# choose the url to crawl
url = 'http://www.adelphigroup.us'
# get the result back with the BeautifulSoup crawler
soup = BeautifulSoup(urlopen(url), "html.parser")

# results = soup.find_all('a')

count = 0

d={}

for link in soup.find_all('a'):
    # print(link.get('href'))
    count += 1
    d[count] = link

pprint.pprint(d)
