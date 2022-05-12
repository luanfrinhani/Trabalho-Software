#/bin/bash
nameImage={project-name}
urlImage={ecr-url}
tagImage={tag}

$(aws ecr get-login --no-include-email --region us-east-1)
docker build -f docker/staging/Dockerfile -t $nameImage .
docker tag $nameImage:latest $urlImage:$tag
docker push $urlImage:$tag
