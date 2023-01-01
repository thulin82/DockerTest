FROM mcr.microsoft.com/dotnet/aspnet:6.0 AS base
WORKDIR /app
EXPOSE 80
FROM mcr.microsoft.com/dotnet/sdk:6.0 AS build
WORKDIR /src
COPY ["DotNet.Docker.Web.csproj", "."]
RUN dotnet restore "./DotNet.Docker.Web.csproj"
COPY . .
WORKDIR "/src/."
RUN dotnet build "DotNet.Docker.Web.csproj" -c Release -o /app/build
FROM build AS publish
RUN dotnet publish "DotNet.Docker.Web.csproj" -c Release -o /app/publish
FROM base AS final
WORKDIR /app
COPY --from=publish /app/publish .
ENTRYPOINT ["dotnet", "DotNet.Docker.Web.dll"]