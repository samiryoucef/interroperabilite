from flask import Flask, jsonify, request
import repository

# Créer l'application
app = Flask(__name__)

# Définir les routes
@app.route('/')
def home():
    return "C'est cool REST !"



@app.route('/students', methods=['GET'])
def get_students():
    students = repository.get_all_students()
    return jsonify(students), 200

# Lancer le serveur
if __name__ == '__main__':
    app.run(debug=True)
