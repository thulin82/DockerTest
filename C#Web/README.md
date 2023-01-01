### How to use

#### Build

```bash
docker build -t dotnet_web_img .
```

#### Run

```bash
docker run -d -p 8080:80 --name dotnet_web_app dotnet_web_img
```
