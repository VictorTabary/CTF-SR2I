FROM ubuntu

RUN apt update && apt install -y openssh-server libgomp1
RUN mkdir -p /run/sshd
RUN touch /bin/zip2john

CMD ["bash","-c","service ssh start;sleep infinity"]