
import cv2
import pyqrcode
from pyqrcode import QRCode
from pyzbar.pyzbar import decode
import numpy as np


cap = cv2.VideoCapture(0)

while True:

    ret, frame = cap.read()

    
    for codes in decode(frame):
        
        
        info = codes.data.decode('utf-8')

        
        tipo = info[0:2]
        tipo = int(tipo)

        
        pts = np.array([codes.polygon], np.int32)
        xi, yi = codes.rect.left, codes.rect.top

        
        pts = pts.reshape((-1,1,2))

        if tipo == 69:  
            
            cv2.polylines(frame, [pts], True, (255, 255, 0), 5)
            cv2.putText(frame, 'E0' + str(info[2:]), (xi - 15, yi - 15), cv2.FONT_HERSHEY_SIMPLEX, 1, (255, 55, 0), 2)
            print(" El usuario es estudiante del colegio General Santander  \n"
                  " Numero de Identificacion: E", str(info[2:]))

        if tipo == 71:  
           
            cv2.polylines(frame, [pts], True, (255, 0, 255), 5)
            cv2.putText(frame, 'G0' + str(info[2:]), (xi - 15, yi - 15), cv2.FONT_HERSHEY_SIMPLEX, 1, (255, 0, 255), 2)
            print(" El usuario es maestro del colegio General Santander \n"
                  " Numero de Identificacion: G", str(info[2:]))
       
        #print(info)

   
    cv2.imshow(" LECTOR DE QR", frame)
  
    t = cv2.waitKey(5)
    if t == 27:
        break

cv2.destroyAllWindows()
cap.release()