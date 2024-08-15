#Hacemos uso de la libreria de tkinter para facilitar el desarrollo de la aplicacion
import tkinter
ventana = tkinter.Tk()
ventana.geometry("1280x720")

etiqueta = tkinter.Label(ventana, text = "SLTIN")
etiqueta.pack()

boton1 = tkinter.Button(ventana, text=("incio"))
boton1.pack()
boton1.grid(row = 0, column = 0)

boton2 = tkinter.Button(ventana, text=("Agreagar"))
boton2.pack()


cajaTexto = tkinter.Entry(ventana)
cajaTexto.pack()

ventana.mainloop()