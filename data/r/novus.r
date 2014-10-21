#!/usr/bin/env Rscript

library(XML)
library(scrapeR)
library(stringr)

getNumberOfPages <- function(urlParameter) {
  pageSource <- scrape(url=urlParameter, headers=TRUE, parse=FALSE)
  html <- htmlParse(pageSource, asText=TRUE, encoding='UTF-8')
  pagination =  unlist(xpathSApply(html, '//div[@class="pagination pagination-centered"]', xmlValue))
  number_of_pages_list = str_match_all(pagination, "\\d")
  number_of_pages = length(unlist(number_of_pages_list))
  return(number_of_pages)
}

getPageDataFrame <- function(urlParameter) {
  pageSource <- scrape(url=urlParameter, headers=TRUE, parse=FALSE)
  html <- htmlParse(pageSource, asText=TRUE, encoding='UTF-8')
  
  hrivna_price = unlist(xpathSApply(html, '//span[@class="grivna price"]', xmlValue))
  kopiyki_price = unlist(xpathSApply(html, '//span[@class="kopeiki"]', xmlValue))
  name = unlist(xpathSApply(html, '//div[@class="one-product-name"]', xmlValue))
  
  result = list()
  for (i in 1:length(name)) {
    vector = c(str_trim(name[i]), hrivna_price[i], kopiyki_price[i])
    result = c(result, list(vector))
  }
  df <- data.frame(matrix(unlist(result), nrow=length(result), byrow=T))
  return(df)
}

number_of_pages = getNumberOfPages('https://novus.zakaz.ua/ru/bakery/')
today <- format(Sys.Date(), format="%Y%m%d")
for (i in 1:number_of_pages) {
  df = getPageDataFrame(paste("https://novus.zakaz.ua/ru/bakery/?&page=", i,sep=""))
  write.table(df, file = paste(getwd(),"/data/cache/",today,"/novus.", i, ".csv", sep=""), sep=',', col.names = FALSE)
}




