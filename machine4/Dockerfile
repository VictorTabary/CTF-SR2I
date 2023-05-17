FROM ubuntu

RUN apt update && apt install -y openssh-server libgomp1

CMD ["bash","-c","service ssh start;sleep infinity"]