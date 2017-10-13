@echo off


docker build -t lyzt-websrc .

docker tag lyzt-websrc hub.c.163.com/luanhailiang/lyzt-websrc 

docker push  hub.c.163.com/luanhailiang/lyzt-websrc

echo build compelte !!!!
pause