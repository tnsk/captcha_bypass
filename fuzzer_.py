import urllib, urllib2, cookielib, os

cookieli = cookielib.CookieJar()

opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cookieli))

captcha_oku = opener.open('http://localhost/resim.php')

cikti = open('kir.png','wb')
cikti.write(captcha_oku.read())
cikti.close()

os.system("tesseract kir.png metin")

metinoku = open('metin.txt','r')
captcha = metinoku.read()
metinoku.close()


post_data = urllib.urlencode({'captcha' : captcha.strip() })

sonuc = opener.open('http://localhost/index.php', post_data)
print "Captcha " + captcha.strip()
print sonuc.read()
