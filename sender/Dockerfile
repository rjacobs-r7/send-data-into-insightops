FROM node:12-alpine

WORKDIR /app
RUN mkdir data
WORKDIR /app/sender
COPY . .
RUN npm install --production

CMD ["node", "loop.js"]