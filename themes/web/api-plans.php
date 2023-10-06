<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #divPlans {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h2>Planos</h2>
    <button>Carregar Planos</button>
    <div id="divPlans">
        <ul id="planList">
            <!-- Aqui os planos serão listados -->
        </ul>
    </div>
    <script type="module" async>
        const url = "<?php echo url("/api/plans"); ?>";
        const options = {
            method: "GET"
        };
    
        const button = document.querySelector("button");
        const planList = document.getElementById("planList");
    
        const displayPlans = async () => {
            try {
                const response = await fetch(url, options);
                const plans = await response.json();
    
                plans.forEach((plan) => {
                    const listItem = document.createElement("li");
                    listItem.textContent = `${plan.name} - ${plan.price}`;
                    planList.appendChild(listItem);
                });
            } catch (error) {
                console.error(error);
            }
        };
    
        button.addEventListener("click", () => {
            displayPlans();
        });
    </script>
</body>
</html>
