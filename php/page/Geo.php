<!DOCTYPE html>
<html lang="fr">
<?php include "../layout/metadata.php" ?>
    <body>
   <?php include "../layout/header.php" ?>
   <?php include "../layout/navigation.php" ?>
        
   <div class="options-wrapper">
   <div class="options">
      <div class="option active champion1" >
         <div class="shadow"></div>
         <div class="label">
            <div class="icon">
               <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA0lBMVEX4+PjIrG1cRiH////5+fny8vLi4uLn5+fg0LHq6urq6OPd3d38/PxZQhb//v9aRSL59fDs5dHHp2KQgm9YPhVgTS1cRCNZRx9RNACyq6BUOQicj31YPg9XQRj///vMsXfMtX1/cFuGeGPHrWuono/RvYuShnKglYK4r6RSOwDJqW7KtXjUz8NcQx3m28PFqWGuo5a4s6JUNxFDJgBZRhTm39ZeTyrw7OVrWzvQvop1aU7y6dn38+ZKMgDCubHRuo/Vx5uwrJXTycHLy8vJqXXDpFepeBZWAAAIcElEQVR4nO2di1rTSBSAk+bWkJLWCmmFNiJVpGiou4LoStF1d9//lXZuuZUkncmtk3h+ga9Cv5Cfc2YmmUtGUQAAAAAAAAAAAADgN0cXQ/T95ahT0DBsEYyWCP/6lfVM0xEStM12cDCmYxoVBS1T0SRmpBjoDCug29ahHfZjVFJ0Roc+fw4SiSpcAxnmoc+eB9umWjquFHENxG/ZiSRFaWrpLB6mY5mWY9r8MbQNfISHN7tc5vEyxRX6SHKe5H2St8/49IxXIdeMP9CHr/maQguiGVaKI5u7ZOoWMTxaLEOCxNcUJzH0G8f4c0E5yWPxnLPF+gyzXqOXi+g96DvkS4L1n/PPHzViiGNo2nFUw7zdj0kNj8cDTjzEOGIw3sPzA+y8YVbAeHl3H2dpUlDTuYNo6oKGmPgckt6IjPemfTPf46WI/zbjky/3ccRSgqh65TZUShi2w3h5eo8ylOgYTBAXylvfRa8c3isdeQ1nJ6dHTFB3wgi6vja8IK8sg7Mgymu4/PKg+T5RdIwwRZHg5gfx7rihhyL49QHHjOSobUXXJcOp+q0PhjOPCLpaShCJ3W7Um3fk+x039BZfcYo+iyAWVHthuPg60ajfyNkVXPXAcLz4S49qUYMK4irndnqzUlUUw46Xw3GwfjNhZTASxIXwxWp1o/bBcLC4nGg0hEjQjgU3N0Sw64beYP3Gj8qgYTthQ/9ihVJ0RQ073eIHZ5c+ayWQoEF6IHySojSA3Y/h+qWv+WGKUkEcwe/qVO2H4foKRZAYxoKI76pKqtHOG3rzc581E0aUoiiCj2qUoipuD7tq6AXbq/BS1EhG8PFiteqF4XL9XmNl0HCUUNDXHj5Mb/oRw/VbzQ8jqCQi+CGh12XDAAkmy6DCmonHC1XthWEw/6Sxhj4SxM3E5GLTE8Ptq/AGgqSowsrg5EK9ad5w7GV1CtbKbHEdp2goiP4/uUB3S+qqacPZIO41bMbPW1+HEbTNKIJI8N1uAJsxDILcHu16WGyfwggmBH1/8m0nfClD3k5vnix92TCXT6SZQOdtO4oSRdB/N129fq7IDMPBmhoMg1OtLfB4i4OHGVxUq/o/Nhk5irio39BvUZCOo6DfiAT/zcjRThsiQZ3d0rva6Of0Jluwu4YmHmtxyEARujglgn3K0pHtkGFdh16qaT9vsu2aNFQssTk3IjgO8kMnrBsWvXsa5lQyjRragrOKRAinHui2jetRf5hXyTRqiI7Y+AQ2NuY+ybejhm5ThnxHrED/DdmYe58N6Y19jw11TkOh8wFDMKwVMATDTMAQDGsFDMEwEzAEw1oBQzDMBAzBMDw3XeFcNFm0MIvX8AC9GIblOJyrJouWLElraJimQTrJONAV28kd25TUUGcjYvzkLnuV1VB4gV/umiVZDUVDiIOYfSxJDRVTeJ1t3jwKWQ3xRGVf+xivjyzgbx0fLG/xIJ/hB634fGo3ZCuJr7Zn+5nPJ0XHktWQxvD8JPcIMeO7zhpq2vmCw3Cw6LLhMU8MwRAMfw/D12AIhh0wbPmqDQzBEAzBEAzBUErD/rf4YAiG8hv2v6YBQzAEQzAEw8qGLhiCofSG/S+HvTdU+284OoQhHgP2ODg26sjSwvNp0LDoicDhg4GPO3l/yGYqfJ5zsJ3gQtQxQzbb5OH+aD/mPXnGTt5TOzgN2y6HbGmrCNXmRKGaxm931pclPOvLyTkZWQ2FNx/I3cxBUkNFscQmJypO3uOBOMuhX1RbNWKo2I5jGiMu8Czh3OcfyWuIJ3nTXWH2YdpFm1PIa0h3DuF5PETxDiMyG9YDGDLDERim6KChKnY+YAiGtQKGYJgJGGJDvfeGYi1sBQ5o2O8YLk8Le4/q5DCG3vyjRgx5n9tbgYMYBmsqmNs/VieHMPTumOAor3+sTg5gGCx/4R+7Ljpgs3KE9g2DBYsg3hGlWTlC64bLbSioiWz8WR4hQ7O6IY0gGTQ328hRbkMyfsW9iWWe4XjgHccRbKG1x4gYKlUNZ8Hdr1iwUa8YMcOKWeptsaAbCta8l3seAuWwqmEw/4X1aBnEDy6x+fq0K/JPSzEco0omkaLID/fGt7d/d/MxnO0IWuJjoJIbeutUGTTb3rq74Swdk0qG7u1GIsgE3bb8XL9hw1mwTjUTJtvltK0tIBCT3e2B6jUcYEG2iWscQeT3/UVb3L5u1PDsKRVBlqK+djtti9W04KH6FQ3HM2+bJYgieLvnt7ZJBcNZkBTEzQQV9PE+tfJQwdBbP7Gbid0Ibgp21GibVQXDRSqCcTuIUnQlT5aWNwzSZdAxZCyDmLKGwTwVwYTgdP8vbZWyhtssQZdUMkV7ohyAcoYeLoPuM0EaQbkEyxmerKMIRluDyddMMIQM2dTJo22mIGkmDu3zHLEY2tTwOkNQk7CSIYjFcOexjpGg75IUlTCCoobp6a9xBHGlc7uRrIphiGWp4oyyBEmKbtS87esOi6ChET26Ujd3BSVF0FAxHMcySG+hoUcpKmczwRA0JE9xtiwbP6Y5FUEpKxmCaAyJJZm/Gwn62lC+K5mYEoZUkzUTuKEfriQWLG2YKoPy6qllDZO3S3gHSZkVSxkmK5lh7i6uklAuhvHdROEeoFJQpi5NXKoNN1JnKKZMDE07aiY2qz09zoenhCG5/PbDMih7CEsYxisIh/JeqsUI9ibSJNVDQdkrGcyKzTYRMhxFzUQHFKkh94whakhqmeF/0w39t8FfZX2xUR81kTWkBPJUhMefw45QuKa/IIYdQ2zOMtuVnrT49NOV94Xr+3h4LHcrl+wYCq83PziCM3qF15sfHrEQ4sXYhtLenKeq4PMVnu9qWCbnllQSQFeEi4IqJr5txSSgYL37PstuUNIOAAAAAAAAAAAAAPrD/0TqLuzVNOXHAAAAAElFTkSuQmCC">
            </div>
            <div class="info">
               <div class="main">Tristana</div>
               <div class="sub">Best ADC</div>
            </div>
         </div>
      </div>
   <div class="option" >
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="data:image/png;base64,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">
         </div>
         <div class="info">
            <div class="main">Yuumi</div>
            <div class="sub">Best Supp</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shaco_0.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2ec970f4-1706-4915-9a93-41f3d9c8202c/degndao-3803ac5c-8d3b-4205-bdac-17e03fb712dd.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzJlYzk3MGY0LTE3MDYtNDkxNS05YTkzLTQxZjNkOWM4MjAyY1wvZGVnbmRhby0zODAzYWM1Yy04ZDNiLTQyMDUtYmRhYy0xN2UwM2ZiNzEyZGQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.dl2fyLAB4_80akvDhBoZ-4w7eforvxOeLLeqT1Jx2G4">
         </div>
         <div class="info">
            <div class="main">Shaco</div>
            <div class="sub">Best Jungler</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Seraphine_3.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAACICAMAAAALZFNgAAAAKlBMVEX////Iqm6ag17k1bfNwq/5+PbQxrXUyrq/sZm8rZXPxLLVzLy/sZr9/Pwosw9dAAABr0lEQVR4nO3aS26DUBBEURI7iZ3P/rebOY78uqtuPWXQdw4cCcSA4jimaZqmaZr+Wa9+19MpLy9/tAFScmyAfJYceUjREYdUHWlI2RGGvJcdWUjDEYV0HElIyxGE9Bw5yEfPEYN0HSlI2xGCfLUdGYjg6EOWBzxWceyAlBwbIDVHHlJ0xCFVxyUM4RweBHRYENLhQFCHAWEdOgR2yBDaoUJwhwjhHRok4JAgCYcCiTgESMbRh4QcbUjK0YWojm8Yojpu61vegugOFmI4UIjjICGq4157LZQhnoODmA4M4jooiO2AIL6DgQAOBEI4CAjiACCMw4dAjjaktoutHW+FZ+8ZhHK4kPoOtHCYEM7hQUCHBSEdDqS5vzx3GBDWoUNghwyhHSoEd4iQ/h61chw/CiTgEL4yhBwCRNnF1o4+JOTYtgMtv8OYkNmBYo7ZgUDI7EBZx+xADGR2oA2O2YF8SMiRgrQdIUjfkYEIjgjk7LieL1IJgCAOAMI4fAjksCGUw4VgDhPCOTwI6LAgpMOBoA4Dwjp0COyQIbRDheAOEcI7NEjAofzmPk3TNE3TFO0XzyksGgXs+dAAAAAASUVORK5CYII=">
         </div>
         <div class="info">
            <div class="main">Seraphine</div>
            <div class="sub">Best Mid</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Sett_8.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAACICAMAAAALZFNgAAAALVBMVEX///+ag17Iqm7Tybjaxp7dyqXfzargz67QxrXj07TOw7HcyKLezanj1Lbg0K4t2yo5AAABTElEQVR4nO3bzW7CMBBFYQKU8tPy/o/LqgiiieKx586k4px97E+O5E0mux0RERHRxtprO24E0u7QQhwOKeTmcCghLocQ4nPoIF8+hwzidaggbocI8uN2aCAdDgnk1OFQQO7GNocCyLflmPIhtiMfYr2X85QPuSw4siGLjmTIsiMX8rvs6IOsPtTen6Ma8nQUQ67TNiAvjlLIq6MS8uYohLw76iAzRx1kAgIECBAgQJyQ+cJrmwABAgQIECBAgAABAgQIECD/DeINCBAgHw2xvmdXQEIcAZAYxzgkyDEMseZhKiDWPEwFJOw8BiFx5zEG6ZpjE0BCHQOQWEc/xD/3qYFYjsN8sZEaIXJHI0TvaINY89rBjiZIhqMFkuJogFj/N8Q71iFJjnVIkqMHInF0QDQOP0TkcENUDi9E5nBCdA4fROjoukeIiIiIlD0AArwmD9cD7AwAAAAASUVORK5CYII=">
         </div>
         <div class="info">
            <div class="main">Sett</div>
            <div class="sub">Best Top</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://ddragon.leagueoflegends.com/cdn/img/champion/splash/MissFortune_6.jpg">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA0lBMVEX4+PjIrG1cRiH////5+fny8vLi4uLn5+fg0LHq6urq6OPd3d38/PxZQhb//v9aRSL59fDs5dHHp2KQgm9YPhVgTS1cRCNZRx9RNACyq6BUOQicj31YPg9XQRj///vMsXfMtX1/cFuGeGPHrWuono/RvYuShnKglYK4r6RSOwDJqW7KtXjUz8NcQx3m28PFqWGuo5a4s6JUNxFDJgBZRhTm39ZeTyrw7OVrWzvQvop1aU7y6dn38+ZKMgDCubHRuo/Vx5uwrJXTycHLy8vJqXXDpFepeBZWAAAIcElEQVR4nO2di1rTSBSAk+bWkJLWCmmFNiJVpGiou4LoStF1d9//lXZuuZUkncmtk3h+ga9Cv5Cfc2YmmUtGUQAAAAAAAAAAAADgN0cXQ/T95ahT0DBsEYyWCP/6lfVM0xEStM12cDCmYxoVBS1T0SRmpBjoDCug29ahHfZjVFJ0Roc+fw4SiSpcAxnmoc+eB9umWjquFHENxG/ZiSRFaWrpLB6mY5mWY9r8MbQNfISHN7tc5vEyxRX6SHKe5H2St8/49IxXIdeMP9CHr/maQguiGVaKI5u7ZOoWMTxaLEOCxNcUJzH0G8f4c0E5yWPxnLPF+gyzXqOXi+g96DvkS4L1n/PPHzViiGNo2nFUw7zdj0kNj8cDTjzEOGIw3sPzA+y8YVbAeHl3H2dpUlDTuYNo6oKGmPgckt6IjPemfTPf46WI/zbjky/3ccRSgqh65TZUShi2w3h5eo8ylOgYTBAXylvfRa8c3isdeQ1nJ6dHTFB3wgi6vja8IK8sg7Mgymu4/PKg+T5RdIwwRZHg5gfx7rihhyL49QHHjOSobUXXJcOp+q0PhjOPCLpaShCJ3W7Um3fk+x039BZfcYo+iyAWVHthuPg60ajfyNkVXPXAcLz4S49qUYMK4irndnqzUlUUw46Xw3GwfjNhZTASxIXwxWp1o/bBcLC4nGg0hEjQjgU3N0Sw64beYP3Gj8qgYTthQ/9ihVJ0RQ073eIHZ5c+ayWQoEF6IHySojSA3Y/h+qWv+WGKUkEcwe/qVO2H4foKRZAYxoKI76pKqtHOG3rzc581E0aUoiiCj2qUoipuD7tq6AXbq/BS1EhG8PFiteqF4XL9XmNl0HCUUNDXHj5Mb/oRw/VbzQ8jqCQi+CGh12XDAAkmy6DCmonHC1XthWEw/6Sxhj4SxM3E5GLTE8Ptq/AGgqSowsrg5EK9ad5w7GV1CtbKbHEdp2goiP4/uUB3S+qqacPZIO41bMbPW1+HEbTNKIJI8N1uAJsxDILcHu16WGyfwggmBH1/8m0nfClD3k5vnix92TCXT6SZQOdtO4oSRdB/N129fq7IDMPBmhoMg1OtLfB4i4OHGVxUq/o/Nhk5irio39BvUZCOo6DfiAT/zcjRThsiQZ3d0rva6Of0Jluwu4YmHmtxyEARujglgn3K0pHtkGFdh16qaT9vsu2aNFQssTk3IjgO8kMnrBsWvXsa5lQyjRragrOKRAinHui2jetRf5hXyTRqiI7Y+AQ2NuY+ybejhm5ThnxHrED/DdmYe58N6Y19jw11TkOh8wFDMKwVMATDTMAQDGsFDMEwEzAEw1oBQzDMBAzBMDw3XeFcNFm0MIvX8AC9GIblOJyrJouWLElraJimQTrJONAV28kd25TUUGcjYvzkLnuV1VB4gV/umiVZDUVDiIOYfSxJDRVTeJ1t3jwKWQ3xRGVf+xivjyzgbx0fLG/xIJ/hB634fGo3ZCuJr7Zn+5nPJ0XHktWQxvD8JPcIMeO7zhpq2vmCw3Cw6LLhMU8MwRAMfw/D12AIhh0wbPmqDQzBEAzBEAzBUErD/rf4YAiG8hv2v6YBQzAEQzAEw8qGLhiCofSG/S+HvTdU+284OoQhHgP2ODg26sjSwvNp0LDoicDhg4GPO3l/yGYqfJ5zsJ3gQtQxQzbb5OH+aD/mPXnGTt5TOzgN2y6HbGmrCNXmRKGaxm931pclPOvLyTkZWQ2FNx/I3cxBUkNFscQmJypO3uOBOMuhX1RbNWKo2I5jGiMu8Czh3OcfyWuIJ3nTXWH2YdpFm1PIa0h3DuF5PETxDiMyG9YDGDLDERim6KChKnY+YAiGtQKGYJgJGGJDvfeGYi1sBQ5o2O8YLk8Le4/q5DCG3vyjRgx5n9tbgYMYBmsqmNs/VieHMPTumOAor3+sTg5gGCx/4R+7Ljpgs3KE9g2DBYsg3hGlWTlC64bLbSioiWz8WR4hQ7O6IY0gGTQ328hRbkMyfsW9iWWe4XjgHccRbKG1x4gYKlUNZ8Hdr1iwUa8YMcOKWeptsaAbCta8l3seAuWwqmEw/4X1aBnEDy6x+fq0K/JPSzEco0omkaLID/fGt7d/d/MxnO0IWuJjoJIbeutUGTTb3rq74Swdk0qG7u1GIsgE3bb8XL9hw1mwTjUTJtvltK0tIBCT3e2B6jUcYEG2iWscQeT3/UVb3L5u1PDsKRVBlqK+djtti9W04KH6FQ3HM2+bJYgieLvnt7ZJBcNZkBTEzQQV9PE+tfJQwdBbP7Gbid0Ibgp21GibVQXDRSqCcTuIUnQlT5aWNwzSZdAxZCyDmLKGwTwVwYTgdP8vbZWyhtssQZdUMkV7ohyAcoYeLoPuM0EaQbkEyxmerKMIRluDyddMMIQM2dTJo22mIGkmDu3zHLEY2tTwOkNQk7CSIYjFcOexjpGg75IUlTCCoobp6a9xBHGlc7uRrIphiGWp4oyyBEmKbtS87esOi6ChET26Ujd3BSVF0FAxHMcySG+hoUcpKmczwRA0JE9xtiwbP6Y5FUEpKxmCaAyJJZm/Gwn62lC+K5mYEoZUkzUTuKEfriQWLG2YKoPy6qllDZO3S3gHSZkVSxkmK5lh7i6uklAuhvHdROEeoFJQpi5NXKoNN1JnKKZMDE07aiY2qz09zoenhCG5/PbDMih7CEsYxisIh/JeqsUI9ibSJNVDQdkrGcyKzTYRMhxFzUQHFKkh94whakhqmeF/0w39t8FfZX2xUR81kTWkBPJUhMefw45QuKa/IIYdQ2zOMtuVnrT49NOV94Xr+3h4LHcrl+wYCq83PziCM3qF15sfHrEQ4sXYhtLenKeq4PMVnu9qWCbnllQSQFeEi4IqJr5txSSgYL37PstuUNIOAAAAAAAAAAAAAPrD/0TqLuzVNOXHAAAAAElFTkSuQmCC">
         </div>
         <div class="info">
            <div class="main">Miss Fortune</div>
            <div class="sub">ADC Sympa ouais</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Teemo_3.jpg">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAACICAMAAAALZFNgAAAALVBMVEX///+ag17Iqm7Tybjaxp7dyqXfzargz67QxrXj07TOw7HcyKLezanj1Lbg0K4t2yo5AAABTElEQVR4nO3bzW7CMBBFYQKU8tPy/o/LqgiiieKx586k4px97E+O5E0mux0RERHRxtprO24E0u7QQhwOKeTmcCghLocQ4nPoIF8+hwzidaggbocI8uN2aCAdDgnk1OFQQO7GNocCyLflmPIhtiMfYr2X85QPuSw4siGLjmTIsiMX8rvs6IOsPtTen6Ma8nQUQ67TNiAvjlLIq6MS8uYohLw76iAzRx1kAgIECBAgQJyQ+cJrmwABAgQIECBAgAABAgQIECD/DeINCBAgHw2xvmdXQEIcAZAYxzgkyDEMseZhKiDWPEwFJOw8BiFx5zEG6ZpjE0BCHQOQWEc/xD/3qYFYjsN8sZEaIXJHI0TvaINY89rBjiZIhqMFkuJogFj/N8Q71iFJjnVIkqMHInF0QDQOP0TkcENUDi9E5nBCdA4fROjoukeIiIiIlD0AArwmD9cD7AwAAAAASUVORK5CYII=">
         </div>
         <div class="info">
            <div class="main">Teemo</div>
            <div class="sub">Teemo cette grosse merde</div>
         </div>
      </div>
   </div>
</div>
</div>
<script type="text/javascript" src="script.js"></script>
