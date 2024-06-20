# Use an official lightweight Nginx image as the base image
FROM nginx:alpine

# Set the working directory in the container
WORKDIR /usr/share/nginx/html

# Copy HTML and CSS files to the working directory
COPY . .

# Expose port 80 (default for HTTP)
EXPOSE 80

#docker
#use k8s now 
