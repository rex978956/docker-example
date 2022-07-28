from typing import Union

from fastapi import FastAPI
from fastapi.responses import HTMLResponse

import requests

app = FastAPI()


@app.get("/items/{item_id}")
def read_item(item_id: int, q: Union[str, None] = None):
    return {"item_id": item_id, "q": q}



TEMAPLATE = """
<html>
<head>
    <title>FastAPI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.0.4/tocas.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tocas/4.0.4/tocas.min.js"></script>
</head>

<body>
    <div class="ts-space"></div>
    <div class="ts-header is-huge is-center-aligned is-heavy">Curl</div>
    <div class="ts-space is-big"></div>
    <form action="/" method="GET">
        <div class="ts-container is-narrow">
            <div class="ts-row">
                <div class="column is-fluid">
                    <div class="ts-input is-fluid">
                        <input type="text" name="url" placeholder="url">
                    </div>
                </div>
                <div class="column">
                    <button type="submit" class="ts-button">送出</button>
                </div>
            </div>
        </div>
    </form>
    <div class="ts-container is-narrow">
        <div class="ts-header">URL：{}</div>
    </div>
    <div class="ts-space"></div>
    <div class="ts-divider"></div>
    <div class="ts-space"></div>
    <div class="ts-container"><textarea rows="40" cols="120">{}</textarea></div>
    </body>
</html>
"""


@app.get("/", response_class=HTMLResponse)
def curl(url: str='http://phpapache'):
    # append http:// if not exist
    if url and not url.startswith('http://') and not url.startswith('https://'):
        url = 'http://' + url
    try:
        res = requests.get(url).text
    except:
        res = ''
    return TEMAPLATE.format(url, res)