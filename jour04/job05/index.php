<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            font-size: 24px;
            cursor: pointer;
        }
        #reset {
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Morpion</h1>

<table id="board">
    <tr>
        <td><button onclick="placeMarker(0, 0)">-</button></td>
        <td><button onclick="placeMarker(0, 1)">-</button></td>
        <td><button onclick="placeMarker(0, 2)">-</button></td>
    </tr>
    <tr>
        <td><button onclick="placeMarker(1, 0)">-</button></td>
        <td><button onclick="placeMarker(1, 1)">-</button></td>
        <td><button onclick="placeMarker(1, 2)">-</button></td>
    </tr>
    <tr>
        <td><button onclick="placeMarker(2, 0)">-</button></td>
        <td><button onclick="placeMarker(2, 1)">-</button></td>
        <td><button onclick="placeMarker(2, 2)">-</button></td>
    </tr>
</table>

<div id="message"></div>
<button id="resetBtn">Réinitialiser la partie</button>


<script>
    let currentPlayer = 'X';
    let board = [
        ['-','-','-'],
        ['-','-','-'],
        ['-','-','-']
    ];

    function placeMarker(row, col) {
        if (board[row][col] === '-' && !checkWinner()) {
            board[row][col] = currentPlayer;
            document.getElementById('board').rows[row].cells[col].innerHTML = currentPlayer;
            if (checkWinner()) {
                document.getElementById('message').innerText = `${currentPlayer} a gagné !`;
            } else if (boardIsFull()) {
                document.getElementById('message').innerText = 'Match nul !';
            } else {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }
    }

    function checkWinner() {
        // Check rows
        for (let i = 0; i < 3; i++) {
            if (board[i][0] !== '-' && board[i][0] === board[i][1] && board[i][1] === board[i][2]) {
                return true;
            }
        }
        // Check columns
        for (let i = 0; i < 3; i++) {
            if (board[0][i] !== '-' && board[0][i] === board[1][i] && board[1][i] === board[2][i]) {
                return true;
            }
        }
        // Check diagonals
        if (board[0][0] !== '-' && board[0][0] === board[1][1] && board[1][1] === board[2][2]) {
            return true;
        }
        if (board[0][2] !== '-' && board[0][2] === board[1][1] && board[1][1] === board[2][0]) {
            return true;
        }
        return false;
    }

    function boardIsFull() {
        for (let row of board) {
            for (let cell of row) {
                if (cell === '-') {
                    return false;
                }
            }
        }
        return true;
    }

    document.getElementById('resetBtn').addEventListener('click', function() {
    resetBoard();
});

function resetBoard() {
    // Réinitialiser l'état du jeu
    currentPlayer = 'X';
    board = [
        ['-','-','-'],
        ['-','-','-'],
        ['-','-','-']
    ];

    // Réinitialiser les boutons
    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            let button = document.getElementById(`cell_${i}_${j}`);
            button.innerHTML = '-';
        }
    }

    // Effacer le message de victoire ou de match nul
    document.getElementById('message').innerText = '';
}

</script>

</body>
</html>
