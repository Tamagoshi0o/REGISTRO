# Importamos las librerias
import pyqrcode
from pyqrcode import QRCode


# CODIGOS QR ID
# Variables
con = 0

# Generamos los QR
while con <= 1:

    #id = str('j') +  str(con)
    roster = con
    id = '71' + str(con)
    # Creamos los QR
    qr = pyqrcode.create(69 and id, error= 'L')
    # Guardamos
    qr.png('G' + str(roster) + '.png', scale = 6)
    # Aumentamos con
    con = con + 1

