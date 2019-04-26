import app from 'flarum/app';
import Message from '../common/models/Message';
import Settings from './components/Settings';
import addMessagesPane from './addMessagesPane';

app.initializers.add('flagrow-canned-messages', app => {
  app.store.models['flagrow-canned-message'] = Message;

  app.extensionSettings['flagrow-canned-messages'] = () => app.modal.show(new Settings());

  addMessagesPane();
});
