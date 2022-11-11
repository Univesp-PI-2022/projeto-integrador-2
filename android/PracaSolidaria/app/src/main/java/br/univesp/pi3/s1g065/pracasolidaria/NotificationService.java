package br.univesp.pi3.s1g065.pracasolidaria;

import android.app.NotificationChannel;
import android.app.NotificationManager;
import android.app.Service;
import android.content.Intent;
import android.os.Build;
import android.os.IBinder;

import androidx.core.app.NotificationCompat;

import org.xmlpull.v1.XmlPullParser;
import org.xmlpull.v1.XmlPullParserException;
import org.xmlpull.v1.XmlPullParserFactory;

import java.io.IOException;
import java.io.InputStream;
import java.net.MalformedURLException;
import java.net.URL;

public class NotificationService extends Service {

    private static String CHANNEL_ID = "PRACA_SOLIDARIA_RSS";

    public NotificationService() {
        int rssItemCount = getRssItemCount();
        if (rssItemCount > 0){
            createNotificationChannel();
            String notificationTitle = getResources().getString(R.string.notification_title);
            String notificationText = getResources().getString(R.string.notification_text).replace("#", new Integer(rssItemCount).toString());
            NotificationCompat.Builder builder = new NotificationCompat.Builder(this, CHANNEL_ID)
                    .setSmallIcon(R.drawable.praca_solidaria)
                    .setContentTitle(notificationTitle)
                    .setContentText(notificationText)
                    .setPriority(NotificationCompat.PRIORITY_DEFAULT);
        }
    }

    private void createNotificationChannel() {
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            CharSequence name = getString(R.string.channel_name);
            String description = getString(R.string.channel_description);
            int importance = NotificationManager.IMPORTANCE_DEFAULT;
            NotificationChannel channel = new NotificationChannel(CHANNEL_ID, name, importance);
            channel.setDescription(description);
            NotificationManager notificationManager = getSystemService(NotificationManager.class);
            notificationManager.createNotificationChannel(channel);
        }
    }

    public int getRssItemCount(){
        String rss_url = getResources().getString(R.string.rss_url);
        int itemCount = 0;
        try {
            URL url = new URL(rss_url);
            XmlPullParserFactory factory = XmlPullParserFactory.newInstance();
            XmlPullParser xpp = factory.newPullParser();
            xpp.setInput(getInputStream(url), "UTF-8");
            int eventType = xpp.getEventType();
            while(eventType != XmlPullParser.END_DOCUMENT){
                if(eventType == XmlPullParser.START_TAG && xpp.getName().equalsIgnoreCase("item")){
                    itemCount++;
                }
            }
        }
        catch (MalformedURLException e) {
        }
        catch (XmlPullParserException e) {
        }
        finally {
            return itemCount;
        }
    }

    @Override
    public IBinder onBind(Intent intent) {
        // TODO: Return the communication channel to the service.
        throw new UnsupportedOperationException("Not yet implemented");
    }

    public InputStream getInputStream(URL url){
        try{
            return url.openConnection().getInputStream();
        }catch(IOException e){
            return null;
        }
    }

}