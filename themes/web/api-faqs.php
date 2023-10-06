<h2>Olá, FAQS</h2>

<button>Faqs</button>

<div id="divFaqs">
</div>
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
        background-color: orange;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
    }

    button:hover {
        background-color: orange;
    }

    #divFaqs {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    p {
        margin: 0;
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
    }
</style>


<script type="module" async>
    import {request, requestDebugError} from "<?php echo url("/assets/_shared/functions.js"); ?>";

    // http://localhost/escola-manha/api/faqs
    const url = "<?php echo url("/api/faqs"); ?>";


    const options = {
        method: "GET"
    };

    const getFaqs = async () => {
        const faqs = await request(url, options);
        console.log(faqs);
    };

    getFaqs();

    const button = document.querySelector("button");
    button.addEventListener("click", async () => {
        const faqs = await request(url, options);
        console.log(faqs);
        faqs.forEach((faq) => {
            console.log(faq);
            document.querySelector("#divFaqs").insertAdjacentHTML("beforeend", `<p>${faq.question} ${faq.answer}</p>`);
            //console.log(faq.question);
        });
    });
</script>