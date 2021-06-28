<?php
//Sets the URL that will be shown to users for each upload. Must be set and must have tailing slash
define('URL', 'https://share.ematters.com.tw/');
define('TITLE', '#PictShare#');
//If set, will only show the upload form and allow to upload via API if request is coming from this subnet
define('ALLOWED_SUBNET', '192.168.11.0/24');
//If set, will whitelist content controllers for your instance. Must be uppercase and can be comma separated. Example: Only Pictures: IMAGE, Pictures and Videos: IMAGE,VIDEO
define('CONTENTCONTROLLERS', '');
define('MASTER_DELETE_CODE', '');
define('MASTER_DELETE_IP', '');
//If set, all uploads require this code via GET or POST variable "uploadcode" or upload will fail
// not implemented
define('UPLOAD_FORM_LOCATION', '');
define('UPLOAD_CODE', '');
define('LOG_UPLOADER', false);
define('MAX_RESIZED_IMAGES',-1);
define('ALLOW_BLOATING', false);
define('SHOW_ERRORS', false);
define('JPEG_COMPRESSION', 90);
define('PNG_COMPRESSION', 6);
define('ALT_FOLDER', '');
define('S3_BUCKET', '');
define('S3_ACCESS_KEY', '');
define('S3_SECRET_KEY', '');
define('S3_ENDPOINT', '');
define('FTP_SERVER', '');
define('FTP_PORT', 21);
define('FTP_USER', '');
define('FTP_PASS', '');
define('FTP_SSL', false);
define('FTP_BASEDIR', '');
define('ENCRYPTION_KEY', '');
define('FFMPEG_BINARY', '/usr/share/nginx/html/bin/ffmpeg');
