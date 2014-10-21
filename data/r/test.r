#!/usr/bin/env Rscript

sayHello <- function(){
  
  df <- data.frame(Date=as.Date("01/01/2000", format="%m/%d/%Y"), File="", User="", stringsAsFactors=FALSE)
  df <- df[-1,]
  today <- format(Sys.Date(), format="%Y%m%d")
  write.table(df, file = paste(getwd(),"/data/cache/",today,"/novus.", 1, ".csv", sep=""), sep=',', col.names = FALSE)
  
  print(getwd());
}

sayHello();