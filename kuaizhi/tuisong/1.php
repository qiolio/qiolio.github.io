//提交数据
{
  "job_id": "XbBg4V8GJ7Z5Y", //获取任务返回的job_id
  //一次可以提交多张卡片
  "cards": [
    //卡片1
    {
        //卡片上展示的图片，最多提交9张
        //!!images字段必须为数组
      "images": [
        "http://image.bee-ji.com/2349"
      ],
        //卡片标题
      "title": "系统异常通知",
        //卡片正文
      "text": "当前整体系统负载大于80%\n消息队列阻塞数 33212 条"
        //链接
      //"url" : "https://"
        //
      //"video" : "https://"
    },

  ]
}

## 推送任务
curl -X "POST" "https://api.kzfeed.com/bot/8ac0fd870425fb91255d88f341195d2c/pushMessage" \
     -H 'Content-Type: application/json; charset=utf-8' \
     -d $'{
  "job_id": "****",
  "cards": [
    {
      "images": [
        "http://image.bee-ji.com/2349"
      ],
      "title": "系统异常通知",
      "text": "当前整体系统负载大于80%\\n消息队列阻塞数 33212 条"
    }
  ]
}'

