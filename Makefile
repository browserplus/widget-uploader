uploader-min.js: uploader.js
	java -jar tools/yuicompressor-2.4.2.jar uploader.js > uploader-min.js

.PHONY: clean
clean:
	rm -f uploader-min.js *~
