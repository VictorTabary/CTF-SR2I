FROM debian

RUN apt update
RUN apt install -y openssh-server

CMD ["bash","-c","service ssh start;sleep infinity"]