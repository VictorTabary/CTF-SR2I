FROM debian

RUN apt update && apt install -y openssh-server gcc python3

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
RUN echo "root:ashira55" | chpasswd

COPY main.c /root/main.c
RUN gcc -o /bin/main /root/main.c
RUN rm /root/main.c
RUN sed -i 's/\/bin\/bash/\/bin\/main/g' /etc/passwd

CMD ["bash","-c","service ssh start;sleep infinity"]
