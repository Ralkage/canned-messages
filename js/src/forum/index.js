import app from 'flarum/app';
import Message from '../common/models/Message';

app.initializers.add('flagrow-canned-messages', app => {
  app.store.models['flagrow-canned-message'] = Message;
});
