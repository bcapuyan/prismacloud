import requests
import sys
sys.path.insert(1,'C:/Users/boncap01/Documents/GitHub/secure')

import config.py

url = "https://api.prismacloud.io/login"
payload = "{\"username\":\"config.username\",\"password\":\"config.password\",\"customerName\":\"boncap01\"}"
headers = {"Content-type": "application/json"}
response = requests.request("POST", url, data=payload, headers=headers)


token = response.json().get('token')
print(token)

url = "https://api.prismacloud.io/user/me"
headers = {"Content-type": "application/json","x-redlock-auth": token}
response = requests.request("GET", url, headers=headers)
print(response.text , response.status_code, response.reason)