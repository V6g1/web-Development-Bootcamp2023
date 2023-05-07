from flask import Flask, request, Response
import qrcode
from io import BytesIO

app = Flask(__name__)

@app.route('/qr', methods=['GET'])
def generate_qr():
    url = request.args.get('url')
    if not url:
        return 'Please provide a valid URL as a query parameter', 400
    qr = qrcode.QRCode(version=1, box_size=10, border=5)
    qr.add_data(url)
    qr.make(fit=True)
    img = qr.make_image(fill_color='black', back_color='white')
    byte_io = BytesIO()
    img.save(byte_io, 'PNG')
    byte_io.seek(0)
    return Response(byte_io, mimetype='image/png')

if __name__ == '__main__':
    app.run(debug=True)
