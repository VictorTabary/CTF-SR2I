FROM debian

RUN apt update && apt install -y openssh-server

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
RUN echo "root:ashira55" | chpasswd

CMD ["bash","-c","service ssh start;sleep infinity"]