FROM debian

RUN apt update && apt install -y openssh-server gcc python3

RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
RUN echo "root:ashira55" | chpasswd
COPY main.c /home/main.c
COPY flag.txt /home/flag.txt
COPY pyjail.py /home/pyjail.py
RUN gcc -o /home/main /home/main.c
RUN sed -i 's/\/bin\/bash/\/home\/main/g' /etc/passwd

CMD ["bash","-c","service ssh start;sleep infinity"]