docker run --name myXampp -p 41061:22 -p 41062:80  -v ./:/www tomsik68/xampp:8
# docker exec -ti myXampp bash
# http://localhost:41062/www/index.php