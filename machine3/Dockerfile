FROM penkit/vsftpd:2.3.4

COPY ./flag2.txt /root/

RUN mkdir -p /var/ftp/pub
RUN chown nobody:nogroup /var/ftp/pub
RUN echo "anon_root=/var/ftp/" >> /etc/vsftpd/vsftpd.conf
RUN echo "no_anon_password=YES" >> /etc/vsftpd/vsftpd.conf

COPY ./flag.txt /var/ftp/pub
