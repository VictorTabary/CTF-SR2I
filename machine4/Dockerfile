FROM debian

RUN apt update
RUN apt install -y openssh-server

COPY ./id_ed25519.pub /root/.ssh/authorized_keys
RUN chmod 600 /root/.ssh/authorized_keys 

CMD ["bash","-c","service ssh start;sleep infinity"]